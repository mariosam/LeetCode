/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { canPlaceFlowers } from './CanPlaceFlowers.js'

TEST('Starting CanPlaceFlowers test...', (t) => {
    //Test 1
    let want = true
    let got = canPlaceFlowers( [1,0,0,0,1], 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = canPlaceFlowers( [1,0,0,0,1], 2 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
