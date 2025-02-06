/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { areAlmostEqual } from './CheckIfOneStringSwapCanMakeStringsEqual.js'

TEST('Starting CheckIfOneStringSwapCanMakeStringsEqual test...', (t) => {
    //Test 1
    let want = true
    let got = areAlmostEqual( "bank", "kanb" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = areAlmostEqual( "attack", "defend" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = true
    got = areAlmostEqual( "kelb", "kelb" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
