/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numOfWays } from './NumberOfWaysToPaintN×3Grid.js'

TEST('Starting NumberOfWaysToPaintN×3Grid test...', (t) => {
    //Test 1
    let want = 12
    let got = numOfWays( 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 30228214
    got = numOfWays( 5000 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
