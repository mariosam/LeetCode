/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numMusicPlaylists } from './NumberOfMusicPlaylists.js'

TEST('Starting NumberOfMusicPlaylists test...', (t) => {
    //Test 1
    let want = 6
    let got = numMusicPlaylists( 3, 3, 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 6
    got = numMusicPlaylists( 2, 3, 0 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 2
    got = numMusicPlaylists( 2, 3, 1 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
