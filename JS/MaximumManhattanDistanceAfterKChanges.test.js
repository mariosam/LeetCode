/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxDistance } from './MaximumManhattanDistanceAfterKChanges.js'

TEST('Starting MaximumManhattanDistanceAfterKChanges test...', (t) => {
    //Test 1
    let want = 3
    let got = maxDistance( "NWSE", 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 6
    got = maxDistance( "NSWWEW", 3 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
