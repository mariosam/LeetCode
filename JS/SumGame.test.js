/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { sumGame } from './SumGame.js'

TEST('Starting SumGame test...', (t) => {
    //Test 1
    let want = false
    let got = sumGame( "5023" )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = true
    got = sumGame( "25??" )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 3
    want = false
    got = sumGame( "?3295???" )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
